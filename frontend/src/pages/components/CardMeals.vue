<template>
    <v-row
        class="justify-center align-center mt-5"
    >
        <template>
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
                        max-width="200"
                        :src="require('@/assets/logo.png')"
                    >
                    </v-img>

                    <v-card-title
                        class="justify-center"
                    >
                        Titulo do Meal
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
                                    <v-list-item-content
                                        class="text-center"
                                    >
                                        <v-list-item-subtitle>
                                            Item subtitulo
                                        </v-list-item-subtitle>
                                        <v-list-item-title>
                                            Item titulo
                                        </v-list-item-title>
                                    </v-list-item-content>

                                    <v-list-item-content
                                        class="text-center"
                                    >
                                        <v-list-item-subtitle>
                                            Item Subtitulo
                                        </v-list-item-subtitle>
                                        <v-list-item-title>
                                            Item Titulo
                                        </v-list-item-title>
                                    </v-list-item-content>
                                </v-list-item>
                            </v-list>
                        </v-row>
                    </v-card-text>
                    <v-card-title
                        class="justify-center"
                    >
                        Titulo card
                    </v-card-title>
                    <v-card-actions
                        class="pb-5 pr-5 pl-5"
                    >
                        <v-btn
                            color="accent"
                            block
                            @click="pageMeal()"
                        >
                            See Meal
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
        </template>

        <template>
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
                        max-width="200"
                        :src="require('@/assets/logo.png')"
                    >
                    </v-img>

                    <v-card-title
                        class="justify-center"
                    >
                        Titulo do Meal
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
                                    <v-list-item-content
                                        class="text-center"
                                    >
                                        <v-list-item-subtitle>
                                            Item subtitulo
                                        </v-list-item-subtitle>
                                        <v-list-item-title>
                                            Item titulo
                                        </v-list-item-title>
                                    </v-list-item-content>

                                    <v-list-item-content
                                        class="text-center"
                                    >
                                        <v-list-item-subtitle>
                                            Item Subtitulo
                                        </v-list-item-subtitle>
                                        <v-list-item-title>
                                            Item Titulo
                                        </v-list-item-title>
                                    </v-list-item-content>
                                </v-list-item>
                            </v-list>
                        </v-row>
                    </v-card-text>
                    <v-card-title
                        class="justify-center"
                    >
                        Titulo card
                    </v-card-title>
                    <v-card-actions
                        class="pb-5 pr-5 pl-5"
                    >
                        <v-btn
                            color="accent"
                            block
                            @click="pageMeal()"
                        >
                            See Meal
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
        </template>

        <template>
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
                        max-width="200"
                        :src="require('@/assets/logo.png')"
                    >
                    </v-img>

                    <v-card-title
                        class="justify-center"
                    >
                        Titulo do Meal
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
                                    <v-list-item-content
                                        class="text-center"
                                    >
                                        <v-list-item-subtitle>
                                            Item subtitulo
                                        </v-list-item-subtitle>
                                        <v-list-item-title>
                                            Item titulo
                                        </v-list-item-title>
                                    </v-list-item-content>

                                    <v-list-item-content
                                        class="text-center"
                                    >
                                        <v-list-item-subtitle>
                                            Item Subtitulo
                                        </v-list-item-subtitle>
                                        <v-list-item-title>
                                            Item Titulo
                                        </v-list-item-title>
                                    </v-list-item-content>
                                </v-list-item>
                            </v-list>
                        </v-row>
                    </v-card-text>
                    <v-card-title
                        class="justify-center"
                    >
                        Titulo card
                    </v-card-title>
                    <v-card-actions
                        class="pb-5 pr-5 pl-5"
                    >
                        <v-btn
                            color="accent"
                            block
                            @click="pageMeal()"
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
            >

            </v-pagination>
        </v-col>
    </v-row>
</template>

<script>
export default {
    name: "CardMeals",
    data: () => ({
        pagination: {
            current: 1,
            total: 0
        }
    }),
}
</script>