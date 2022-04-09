import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
Vue.use(Vuetify)

export default new Vuetify({
    theme: { dark:  false,
        themes: {
            light: {
                primary: '#f7f7ff',
                secondary: '#87cbfa',
                white : '#FFF',
                black : '#000'
            },
        },
    }
})
