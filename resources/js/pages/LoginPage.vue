<template>
    <div class="login-page">
        <div class="wraping d-flex justify-content-center" style="margin-top:200px;">
            <v-card width="500" color="secondary" dark>
                <v-card-title>Login</v-card-title>

                <v-card-text>
                    <form @submit.prevent="login">
                        <v-text-field
                            label="Phone"
                            placeholder="Phone"
                            filled
                            dense
                        ></v-text-field>
                        <v-text-field
                            :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
                            label="Password"
                            placeholder="Password"
                            :type="show1 ? 'text' : 'password'"
                            filled
                            dense
                            @click:append="show1 = !show1"
                        ></v-text-field>

                        <v-btn type="submit" color="green">Log In</v-btn>
                    </form>
                    <v-divider></v-divider>
                    <span>D'ont have account ? <router-link to="register">Register</router-link></span>
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
        }
    }),
    methods : {
        login()
        {

        }
    }
}
</script>
