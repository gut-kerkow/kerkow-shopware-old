import FormCmsHandler from "src/plugin/forms/form-cms-handler.plugin";

export default class FormCmsHandlerExtension extends FormCmsHandler {
  _createResponse(changeContent, content) {
    console.log(changeContent, content);
    if (changeContent) {
      if (this._confirmationText) {
        content = this._confirmationText;
      }
      this._block.innerHTML = `<div class="confirm-message">${content}</div>`;
    } else {
      const confirmDiv = this._block.querySelector(".confirm-alert");
      if (confirmDiv) {
        confirmDiv.remove();
      }
      const html = `<div class="confirm-alert">${content}</div>`;

      this._block.innerHTML = html;
    }

    this._block.scrollIntoView({
      behavior: "smooth",
      block: "end",
    });
  }
}
