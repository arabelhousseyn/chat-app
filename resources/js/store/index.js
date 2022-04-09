import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        user: [],
        isAuth: false,
    },
    getters : {
        GET_USER(state)
        {
            return state.user;
        }
    },
    mutations: {
        SET_AUTH(state,status)
        {
            state.isAuth = status
        },
        SET_USER(state,data)
        {
            state.user = data
        },
        SET_OUT(state,option)
        {
            state.user = []
            state.isAuth = false
            localStorage.removeItem('isAuth')
            localStorage.removeItem('data')
        },
        CHECK_AUTH(state,option)
        {
            state.isAuth = (localStorage.getItem('isAuth') !== null) ? true : false
            state.user = (localStorage.getItem('data') !== null) ? JSON.parse(localStorage.getItem('data')) : []
        },
        SET_DATA(state,data)
        {
            state.data = data
        }
    },
    actions: {
    },
    modules: {
    }
})
