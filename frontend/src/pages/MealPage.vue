<template>
    <v-container id="meal-page" fill-height>
        <v-row>
            <v-col>
                <v-sheet
                    min-height="70vh"
                    rounded="lg"
                    class="d-flex justify-center align-center"
                >
                    <v-list>
                        <v-row class="justify-center">
                            <v-col cols="8">
                                <v-list-item class="d-flex flex-column align-center justify-center">
                                    <v-list-item-avatar
                                        width="300"
                                        height="auto"
                                    >
                                        <v-img :src="meal.meal_thumb"></v-img>
                                    </v-list-item-avatar>
                                </v-list-item>

                                <v-list-item 
                                    link :key="meal.id" 
                                    :href="meal.youtube" 
                                    target="_blank"
                                >
                                    <v-list-item-content>
                                        <v-list-item-title class="title mb-2 text-center">
                                            {{ meal.name }}
                                        </v-list-item-title>
                                        <v-list-item-subtitle class="text-center">
                                            {{ meal.youtube }}
                                        </v-list-item-subtitle>
                                        <v-list-item-action class="justify-center">
                                            <v-icon color="red">mdi-youtube</v-icon>
                                        </v-list-item-action>
                                    </v-list-item-content>
                                </v-list-item>

                                <v-list-item class="d-flex justify-center">
                                    <div class="text-center mt-12">
                                        <v-rating
                                            v-model="rating"
                                            color="yellow darken-3"
                                            background-color="grey darken-1"
                                            empty-icon="$ratingFull"
                                            half-increments
                                            hover
                                            large
                                        >
                                        </v-rating>
                                    </div>
                                </v-list-item>

                                <div class="headline">Ingredients</div>

                                <v-list-item class="justify-start px-5 py-5">
                                    <ul 
                                        v-for="item in meal.ingredients"
                                        :key="item.id"
                                    >
                                        <li>{{ item.name }}</li>
                                    </ul>
                                </v-list-item>
                                
                                <div class="headline">Instructions</div>

                                <v-list-item class="justify-start px-5 py-5">
                                    {{ meal.instructions }}
                                </v-list-item>
                            </v-col>
                        </v-row>
                    </v-list>
                </v-sheet>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
import { meal } from '@/http';
import services from '@/http';

export default {
    name: "MealPage",
    data: () => ({
        loading: false,
        meal: null,
        error: null,
        rating: null
    }),
    components: {

    },
    async created() {
        if(this.meal == null) {
            this.loading = true;
            let meal_id = this.$route.params.meal_id;
            const response = await this.findMeal(meal_id);
            this.meal = response.data.results[0];
            this.loadMeals = false;
        }
    },
    watch: {
        '$route': 'findMeal'
    },
    computed: {

    },
    methods: {
        async findMeal(meal_id) {
            this.loading = true;
            this.error = this.meal = null;

            meal.findAllDataByMeal.url = meal.findAllDataByMeal.url.replace('{meal_id}', meal_id);
            try {
                let response = services.http.request(meal.findAllDataByMeal)
                                    .then((result) => {
                                        return result;
                                    }).catch((err) => {
                                        console.log(err)
                                    });
                return response;
            } catch (error) {
                console.log(error)
            }
        }
    }
}
</script>