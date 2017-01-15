import SimpleFilter from './SimpleFilter.jsx';
import 'mesour-core/dist/mesour.min.js';

(function(mesour) {
	mesour.createWidget('simpleFiler', new SimpleFilter());
})(window.mesour);

import './../sass/style.sass';

export default SimpleFilter;