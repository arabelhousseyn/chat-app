<template>
    <div class="register-page">
        <div class="wraping d-flex justify-content-center" style="margin-top:50px;">
            <v-card width="500" color="secondary" dark>
                <h2 class="text-center mt-5">Register</h2>

                <v-card-text>
                    <form @submit.prevent="register">
                        <v-text-field
                            label="FullName*"
                            placeholder="FullName*"
                            filled
                            dense
                        ></v-text-field>
                        <v-text-field
                            label="Phone*"
                            placeholder="Phone*"
                            filled
                            dense
                        ></v-text-field>
                        <v-text-field
                            label="Email"
                            placeholder="Email"
                            filled
                            dense
                        ></v-text-field>
                        <v-text-field
                            :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
                            label="New Password*"
                            placeholder="New Password*"
                            :type="show1 ? 'text' : 'password'"
                            filled
                            dense
                            @click:append="show1 = !show1"
                        ></v-text-field>

                        <v-radio-group row v-model="radios">
                            <template v-slot:label>
                                <div class="font-weight-bold">Gender*</div>
                            </template>
                            <v-radio color="blue" label="Man" value="M"></v-radio>
                            <v-radio color="green" label="Woman" value="W"></v-radio>
                        </v-radio-group>

                        <v-menu
                            v-model="menu"
                            :close-on-content-click="false"
                            :nudge-right="40"
                            transition="scale-transition"
                            offset-y
                            min-width="auto"
                        >
                            <template v-slot:activator="{ on, attrs }">
                                <v-text-field
                                    v-model="date"
                                    label="Birth date*"
                                    prepend-icon="mdi-calendar"
                                    readonly
                                    v-bind="attrs"
                                    v-on="on"
                                ></v-text-field>
                            </template>
                            <v-date-picker
                                dark
                                v-model="date"
                                @input="menu2 = false"
                            ></v-date-picker>
                        </v-menu>

                        <v-btn type="submit" color="green">Register</v-btn>
                    </form>
                    <v-divider></v-divider>
                    <span>you have account ? <router-link to="/">Log In</router-link></span>
                </v-card-text>
            </v-card>
        </div>
    </div>
</template>

<script>
export default {
    data : ()=>({
        show1: false,
        data : {
            phone : null,
            password : null,
        },
        radios : [],
        menu: false,
        date: (new Date(Date.now() - (new Date()).getTimezoneOffset() * 60000)).toISOString().substr(0, 10)
    }),
    methods : {
        register()
        {

        }
    }
}
</script>
