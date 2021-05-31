<template>
    <v-row
        class="justify-center align-center mt-5"
    >
        <template v-if="meals !== null">
            <v-col
                cols="3"
                class="d-flex align-center justify-center mr-lg-5 mr-xl-0"
            >
                <v-card
                    max-width="375"
                    elevation="15"
                    shaped
                >
                    <v-img
                        class="mx-auto"
                        max-width="250"
                        :src="meals[0].meal_thumb"
                    >
                    </v-img>

                    <v-card-title
                        class="justify-center"
                    >
                        {{ meals[0].name}}
                    </v-card-title>

                    <v-card-text
                        class="justify-center"
                    >
                        <v-row
                            align="center"
                            class="mx-0"
                        >
                            <v-list
                                three-line
                            >
                                <v-list-item>
                                    <v-list-item-content class="mr-5">
                                        <v-chip
                                            color="primary"
                                            label
                                            text-color="white"
                                            v-if="meals[0].tags !== null"
                                        >
                                            <v-icon left>
                                                mdi-food-fork-drink
                                            </v-icon>
                                            {{ meals[0].tags.name }}
                                        </v-chip>
                                    </v-list-item-content>
                                    
                                    <v-btn
                                        class="mx-2"
                                        fab
                                        dark
                                        color="red"
                                        :href="meals[0].youtube"
                                        target="_blank"
                                    >
                                        <v-icon dark>
                                            mdi-youtube
                                        </v-icon>
                                    </v-btn>
                                </v-list-item>
                            </v-list>
                        </v-row>
                    </v-card-text>
                    <v-card-actions
                        class="pb-5 pr-5 pl-5"
                    >
                        <v-btn
                            color="accent"
                            block
                            @click="pageMeal(meals[0].id)"
                        >
                            See Meal
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
        </template>

        <template v-if="meals !== null && !(meals.length < 2)">
            <v-col
                cols="3"
                class="d-flex align-center justify-center mr-lg-5 mr-xl-0"
            >
                <v-card
                    max-width="375"
                    elevation="15"
                    shaped
                >
                    <v-img
                        class="mx-auto"
                        max-width="250"
                        :src="meals[1].meal_thumb"
                    >
                    </v-img>

                    <v-card-title
                        class="justify-center"
                    >
                        {{ meals[1].name}}
                    </v-card-title>

                    <v-card-text
                        class="justify-center"
                    >
                        <v-row
                            align="center"
                            class="mx-0"
                        >
                            <v-list
                                three-line
                            >
                                <v-list-item>
                                    <v-list-item-content class="mr-5">
                                        <v-chip
                                            color="primary"
                                            label
                                            text-color="white"
                                            v-if="meals[1].tags !== null"
                                        >
                                            <v-icon left>
                                                mdi-food-fork-drink
                                            </v-icon>
                                            {{ meals[1].tags.name }}
                                        </v-chip>
                                    </v-list-item-content>
                                    
                                    <v-btn
                                        class="mx-2"
                                        fab
                                        dark
                                        color="red"
                                        :href="meals[1].youtube"
                                        target="_blank"
                                    >
                                        <v-icon dark>
                                            mdi-youtube
                                        </v-icon>
                                    </v-btn>
                                </v-list-item>
                            </v-list>
                        </v-row>
                    </v-card-text>
                    <v-card-actions
                        class="pb-5 pr-5 pl-5"
                    >
                        <v-btn
                            color="accent"
                            block
                            @click="pageMeal(meals[1].id)"
                        >
                            See Meal
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
        </template>

        <template v-if="meals !== null && !(meals.length < 3)">
            <v-col
                cols="3"
                class="d-flex align-center justify-center mr-lg-5 mr-xl-0"
            >
                <v-card
                    max-width="375"
                    elevation="15"
                    shaped
                >
                    <v-img
                        class="mx-auto"
                        max-width="250"
                        :src="meals[2].meal_thumb"
                    >
                    </v-img>

                    <v-card-title
                        class="justify-center"
                    >
                        {{ meals[2].name}}
                    </v-card-title>

                    <v-card-text
                        class="justify-center"
                    >
                        <v-row
                            align="center"
                            class="mx-0"
                        >
                            <v-list
                                three-line
                            >
                                <v-list-item>
                                    <v-list-item-content class="mr-5">
                                        <v-chip
                                            color="primary"
                                            label
                                            text-color="white"
                                            v-if="meals[2].tags !== null"
                                        >
                                            <v-icon left>
                                                mdi-food-fork-drink
                                            </v-icon>
                                            {{ meals[2].tags.name }}
                                        </v-chip>
                                    </v-list-item-content>
                                    
                                    <v-btn
                                        class="mx-2"
                                        fab
                                        dark
                                        color="red"
                                        :href="meals[2].youtube"
                                        target="_blank"
                                    >
                                        <v-icon dark>
                                            mdi-youtube
                                        </v-icon>
                                    </v-btn>
                                </v-list-item>
                            </v-list>
                        </v-row>
                    </v-card-text>
                    <v-card-actions
                        class="pb-5 pr-5 pl-5"
                    >
                        <v-btn
                            color="accent"
                            block
                            @click="pageMeal(meals[2].id)"
                        >
                            See Meal
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
        </template>

        <v-col
            cols="12"
            class="mt-10 mb-10"
        >
            <v-pagination
                v-model="pagination.current"
                :length="pagination.total"
                :value="pagination.current"
                @input="onPageChange(pagination.current)"
            >

            </v-pagination>
        </v-col>
    </v-row>
</template>

<script>
import { meal } from '@/http';
import services from '@/http';

export default {
    name: "CardMeals",
    data: () => ({
        pagination: {
            current: 1,
            total: 0
        },
        loadMeals: false,
        meals: null
    }),
    async created() {
        if(this.meals == null) {
            this.loadMeals = true;
            const response = await this.findPaginationMeals(this.pagination.current);
            this.pagination.current = response.data.results.current_page;
            this.pagination.total = response.data.results.last_page;
            this.meals = response.data.results.data;
            this.loadMeals = false;
        }
    },
    methods: {
        findPaginationMeals (page) {
            meal.findAllMealsPaginated.url = meal.findAllMealsPaginated.url + page;
            try {
                let response = services.http.request(meal.findAllMealsPaginated)
                                    .then((result) => {
                                        meal.findAllMealsPaginated.url = "meals/allDataPaginated?page="
                                        return result;
                                    }).catch((err) => {
                                        console.log(err)
                                    });
                return response;
            } catch (error) {
                console.log(error)
            }
        },

        pageMeal(meal_id) {
            this.$router.push({ name: 'meal-page', params: { meal_id: meal_id } });
        },

        async onPageChange(page) {
            this.loadMeals = true;
            const response = await this.findPaginationMeals(page);
            console.log(response)
            this.meals = response.data.results.data;
            this.loadMeals = false;
        }
    },
}
</script>