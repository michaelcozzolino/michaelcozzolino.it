window.axios = require('axios');
window.fuse = require('fuse.js');
window.Vue = require('vue');

import Search from './components/Search.vue';
// import VIcon from './components/icons/VIcon';
import hljs from 'highlight.js/lib/highlight';
import 'highlight.js/styles/monokai-sublime.css';

// Syntax highlighting
hljs.registerLanguage('bash', require('highlight.js/lib/languages/bash'));
hljs.registerLanguage('css', require('highlight.js/lib/languages/css'));
hljs.registerLanguage('html', require('highlight.js/lib/languages/xml'));
hljs.registerLanguage('javascript', require('highlight.js/lib/languages/javascript'));
hljs.registerLanguage('json', require('highlight.js/lib/languages/json'));
hljs.registerLanguage('markdown', require('highlight.js/lib/languages/markdown'));
hljs.registerLanguage('php', require('highlight.js/lib/languages/php'));
hljs.registerLanguage('scss', require('highlight.js/lib/languages/scss'));
hljs.registerLanguage('yaml', require('highlight.js/lib/languages/yaml'));
hljs.registerLanguage('sql', require('highlight.js/lib/languages/sql'));

document.querySelectorAll('pre code').forEach((block) => {
    hljs.highlightBlock(block);
});

Vue.config.productionTip = false;

new Vue({
    components: {
        Search,
        // VIcon,
    },
}).$mount('#vue-search');

