import './bootstrap';

import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';
import '../../node_modules/remixicon/fonts/remixicon.css';

Alpine.plugin(collapse)

window.Alpine = Alpine;

Alpine.start();
