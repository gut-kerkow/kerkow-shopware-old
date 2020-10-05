import AnimalPartsPlugin from "./animal-parts/animal-parts.plugin";

// Register them via the existing PluginManager
const PluginManager = window.PluginManager;
PluginManager.register("AnimalParts", AnimalPartsPlugin, "[data-animal-parts]");
