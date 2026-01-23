import Disclaimer from './components/Disclaimer.vue';

Statamic.booting(() => {
    Statamic.$components.register('disclaimer-fieldtype', Disclaimer);
});