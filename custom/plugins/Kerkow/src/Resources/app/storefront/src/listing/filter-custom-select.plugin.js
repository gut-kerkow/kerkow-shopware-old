import DomAccess from "src/helper/dom-access.helper";
import Iterator from "src/helper/iterator.helper";
import FilterBasePlugin from "src/plugin/listing/filter-base.plugin";
import deepmerge from "deepmerge";

export default class FilterCustomSelectPlugin extends FilterBasePlugin {
  static options = deepmerge(FilterBasePlugin.options, {
    iconSelector: ".filter-multi-select-icon",
    checkboxSelector: ".filter-multi-select-checkbox",
    listItemSelector: ".filter-multi-select-list-item",
    snippets: {
      disabledFilterText: "Filter not active",
    },
    mainFilterButtonSelector: ".filter-panel-item-toggle",
    selectedClass: "filterSelected",
    activeFilterLabelRemoveClass: "filter-active-remove",
  });

  init() {
    this.selection = [];

    this._registerEvents();
  }

  /**
   * @private
   */
  _registerEvents() {
    const checkboxes = DomAccess.querySelectorAll(
      this.el,
      this.options.checkboxSelector
    );

    const icons = DomAccess.querySelectorAll(
      this.el,
      this.options.iconSelector
    );

    Iterator.iterate(icons, (icon) => {
      icon.addEventListener("click", this._onClickFilter.bind(this, icon));
    });

    Iterator.iterate(checkboxes, (checkbox) => {
      checkbox.addEventListener(
        "change",
        this._onChangeFilter.bind(this, checkbox)
      );
    });
  }

  /**
   * @return {Array}
   * @public
   */
  getValues() {
    const checkedCheckboxes = DomAccess.querySelectorAll(
      this.el,
      `${this.options.checkboxSelector}:checked`,
      false
    );

    let selection = [];

    if (checkedCheckboxes) {
      Iterator.iterate(checkedCheckboxes, (checkbox) => {
        selection.push(checkbox.id);
      });
    } else {
      selection = [];
    }

    this.selection = selection;

    const values = {};
    values[this.options.name] = selection;
    return values;
  }

  /**
   * @return {Array}
   * @public
   */
  getLabels() {
    const activeCheckboxes = DomAccess.querySelectorAll(
      this.el,
      `.${this.options.selectedClass}`,
      false
    );

    let labels = [];

    if (activeCheckboxes) {
      Iterator.iterate(activeCheckboxes, (checkbox) => {
        labels.push({
          label: checkbox.dataset.label,
          id: checkbox.id,
        });
      });
    } else {
      labels = [];
    }

    return labels;
  }

  setValuesFromUrl(params) {
    let stateChanged = false;
    Object.keys(params).forEach((key) => {
      if (key === this.options.name) {
        stateChanged = true;
        const ids = params[key].split("|");

        ids.forEach((id) => {
          const checkboxEl = DomAccess.querySelector(
            this.el,
            `[id="${id}"]`,
            false
          );

          if (checkboxEl) {
            checkboxEl.checked = true;
            this.selection.push(checkboxEl.id);
          }
        });
      }
    });

    return stateChanged;
  }

  /**
   * @private
   */
  _onClickFilter(icon) {
    const checkboxEl = DomAccess.querySelector(
      this.el,
      `[id="${icon.dataset.id}"]`,
      false
    );
    if (checkboxEl.checked == false) {
      checkboxEl.checked = true;
    } else {
      checkboxEl.checked = false;
    }
    var event = new Event("change");
    checkboxEl.dispatchEvent(event);
  }

  /**
   * @private
   */
  _onChangeFilter(checkbox) {
    this.listing.changeListing(this);
    const icon = DomAccess.querySelector(
      this.el,
      `[data-id="${checkbox.id}"]`,
      false
    );

    if (checkbox.checked) {
      icon.classList.add(this.options.selectedClass);
    } else {
      icon.classList.remove(this.options.selectedClass);
    }
  }

  /**
   * @param id
   * @public
   */
  reset(id) {
    const checkboxEl = DomAccess.querySelector(this.el, `[id="${id}"]`, false);

    if (checkboxEl) {
      checkboxEl.checked = false;
    }
  }

  /**
   * @public
   */
  resetAll() {
    this.selection.filter = [];

    const checkedCheckboxes = DomAccess.querySelectorAll(
      this.el,
      `${this.options.checkboxSelector}:checked`,
      false
    );

    if (checkedCheckboxes) {
      Iterator.iterate(checkedCheckboxes, (checkbox) => {
        checkbox.checked = false;
      });
    }
  }

  /**
   * @public
   */
  refreshDisabledState(filter) {
    const disabledFilter = filter[this.options.name];

    if (disabledFilter.entities && disabledFilter.entities.length < 1) {
      this.disableFilter();
      return;
    }

    this.enableFilter();

    this._disableInactiveFilterOptions(
      disabledFilter.entities.map((entity) => entity.id)
    );
  }

  /**
   * @private
   */
  _disableInactiveFilterOptions(activeItemIds) {
    const checkboxes = DomAccess.querySelectorAll(
      this.el,
      this.options.checkboxSelector
    );
    Iterator.iterate(checkboxes, (checkbox) => {
      if (checkbox.checked === true) {
        return;
      }

      if (activeItemIds.includes(checkbox.id)) {
        this.enableOption(checkbox);
      } else {
        this.disableOption(checkbox);
      }
    });
  }

  /**
   * @public
   */
  disableOption(input) {
    const listItem = input.closest(this.options.listItemSelector);
    listItem.classList.add("disabled");
    listItem.setAttribute("title", this.options.snippets.disabledFilterText);
    input.disabled = true;
  }

  /**
   * @public
   */
  enableOption(input) {
    const listItem = input.closest(this.options.listItemSelector);
    listItem.removeAttribute("title");
    listItem.classList.remove("disabled");
    input.disabled = false;
  }

  /**
   * @public
   */
  enableAllOptions() {
    const checkboxes = DomAccess.querySelectorAll(
      this.el,
      this.options.checkboxSelector
    );
    Iterator.iterate(checkboxes, (checkbox) => {
      this.enableOption(checkbox);
    });
  }

  /**
   * @public
   */
  disableFilter() {
    const mainFilterButton = DomAccess.querySelector(
      this.el,
      this.options.mainFilterButtonSelector
    );
    mainFilterButton.classList.add("disabled");
    mainFilterButton.setAttribute("disabled", "disabled");
    mainFilterButton.setAttribute(
      "title",
      this.options.snippets.disabledFilterText
    );
  }

  /**
   * @public
   */
  enableFilter() {
    const mainFilterButton = DomAccess.querySelector(
      this.el,
      this.options.mainFilterButtonSelector
    );
    mainFilterButton.classList.remove("disabled");
    mainFilterButton.removeAttribute("disabled");
    mainFilterButton.removeAttribute("title");
  }
}
