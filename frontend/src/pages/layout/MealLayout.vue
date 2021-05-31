<template>
    <v-app>
        <v-app-bar
            app
            color="primary" dark
            height="100%"
            class="px-10"
        >
            <v-btn
                :href="links[0].url"
                :target="links[0].target"
                color="transparent"
                text
                style="border"
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
            </v-btn>
            
            <!-- class="ml-n9" -->
            <v-tabs
                centered    
                color="white darken-1"
            >
                <v-tab
                    v-for="(link, index) in links.slice(0, 3)"
                    :key="index"
                    :href="link.url"
                    :target="link.target"
                >
                    {{ link.name }}
                </v-tab>
            </v-tabs>

            <v-spacer></v-spacer>

            <v-btn
                :href="links[3].url"
                :target="links[3].target"
            >
                {{ links[3].name }}
            </v-btn>
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
                url: "/",
                name: "Meals",
                target: ""
            },
            {
                url: "https://www.linkedin.com/in/sergiobarbosaramos/",
                name: "My Linkedin",
                target: "_blank"
            },
            {
                url: "https://sergiaoprogramador.github.io",
                name: "My Website",
                target: "_blank"
            },
            {
                url: "https://github.com/sergiaoprogramador/topi-full-stack-developer-test",
                name: "Git Project",
                target: "_blank"
            },
        ]
            
    })
}
</script>