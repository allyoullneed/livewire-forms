import Disclaimer from './components/Disclaimer.vue';
import Pin from './components/Pin.vue';
import Rating from './components/Rating.vue';

Statamic.booting(() => {
    Statamic.$components.register('disclaimer-fieldtype', Disclaimer);
    Statamic.$components.register('pin-fieldtype', Pin);
    Statamic.$components.register('rating-fieldtype', Rating);
});