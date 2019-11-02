
import IProvider = require("../../modules/uv-shared-module/IProvider");

interface IPDFProvider extends IProvider{
    getEmbedScript(embedTemplate: string, width: number, height: number): string;
}

export = IPDFProvider;