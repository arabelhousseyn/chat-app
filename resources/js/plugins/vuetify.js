import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
Vue.use(Vuetify)

export default new Vuetify({
    theme: { dark:  false,
        themes: {
            light: {
                primary: '#e85810',
                secondary: '#304156',
                third : '#eee',
                white : '#FFF',
                black : '#000'
            },
        },
    }
})
