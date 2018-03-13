//Code editor
/*
window.Turbolinks = require('turbolinks');
Turbolinks.start();

import { Application } from "stimulus";
import { definitionsFromContext } from "stimulus/webpack-helpers";

const application = Application.start();
const context = require.context("./controllers", true, /\.js$/);
application.load(definitionsFromContext(context));
*/

window.Turbolinks = require('turbolinks');
Turbolinks.start();

window.monaco = require('@timkendrick/monaco-editor');  




//require ('monaco-editor');
//require ("monaco-editor/min/vs/loader.js");
//import monaco from "monaco-editor/min/vs";
//import vseditor from 'monaco-editor/min/vs/editor/editor.main';

  // require.config({ paths: { 'vs': 'monaco-editor/min/vs' }});
  /*
   require.ensure([monaco], function(require) {
        window.editor = monaco.editor.create(document.getElementById('field--roomcontentcode'), {
            language: "php",
        });       
   });*/
   /*
    require(['vs'], function() {
        window.editor = monaco.editor.create(document.getElementById('field--roomcontentcode'), {
            language: "php",
        });
    });*/
    
