<template>
    <v-app>
        <v-app-bar
            app
            color="primary" dark
            height="100%"
            class="px-10"
        >
            <v-avatar
                color="transparent"
                size="100"
            >
                <v-img 
                    alt="Sergio Ramos - Teste TOPI"
                    class="shrink mr-2"
                    contain
                    :src="require('@/assets/Sergio Ramos.png')"
                    transition="scale-transition"
                />
            </v-avatar>
            
            <!-- class="ml-n9" -->
            <v-tabs
                centered    
                color="white darken-1"
            >
                <v-tab
                    v-for="link in links"
                    :key="link.name"
                    :href="link.url"
                    target="_blank"
                >
                    {{ link.name }}
                </v-tab>
            </v-tabs>

            <v-spacer></v-spacer>

            <v-btn>Sign in</v-btn>
        </v-app-bar>

        <v-main class="grey lighten-3">
            
            <router-view></router-view>
        </v-main>

        <v-footer app>
            <h5 class="mx-auto">Sergio Ramos - TOPI - Todos os direitos reservados</h5>            
        </v-footer>
    </v-app>
</template>

<script>
export default {
    name: "MealLayout",
    data: () => ({
        links: [
            {
                url: "https://www.linkedin.com/in/sergiobarbosaramos/",
                name: "My Linkedin"
            },
            {
                url: "https://sergiaoprogramador.github.io",
                name: "My Website"
            },
        ]
            
    })
}
</script>