<template>
    <v-container id="meal-home" fill-height>
        <v-row>
            <v-col>
                <v-sheet
                    min-height="70vh"
                    rounded="lg"
                    class="d-flex justify-center align-center"
                >
                    <CardMeals/>
                </v-sheet>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
import CardMeals from './components/CardMeals';

export default {
    name: "Meals",
    data: () => ({

    }),
    components: {
        CardMeals
    },
    methods: {
        
    },
    created() {
        
    },
    computed: {

    }
}
</script>