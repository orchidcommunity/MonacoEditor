import {Controller} from "stimulus"
import monaco from '@timkendrick/monaco-editor/dist/external';

 
export default class extends Controller {

    connect() {
        let selector = this.element.querySelector('#container').id;
        //const monaco = require('@timkendrick/monaco-editor');
        
        monaco.editor.create(selector, {
            language: 'javascript',
        });
    }
}    