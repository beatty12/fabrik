/*! Fabrik */

define(["jquery"],function(e){return new Class({initialize:function(o){window.addEvent("keyup",function(e){if(e.alt)switch(e.key){case Joomla.JText._("COM_FABRIK_LIST_SHORTCUTS_ADD"):var t=o.form.getElement(".addRecord");o.options.ajax&&t.fireEvent("click"),t.getElement("a")?o.options.ajax?t.getElement("a").fireEvent("click"):document.location=t.getElement("a").get("href"):o.options.ajax||(document.location=t.get("href"));break;case Joomla.JText._("COM_FABRIK_LIST_SHORTCUTS_EDIT"):fconsole("edit");break;case Joomla.JText._("COM_FABRIK_LIST_SHORTCUTS_DELETE"):fconsole("delete");break;case Joomla.JText._("COM_FABRIK_LIST_SHORTCUTS_FILTER"):fconsole("filter")}}.bind(this))}})});