import projects from "./modules/projects";
import {createStore, createLogger} from 'vuex'

export const store = createStore({
    modules: {
        projects
    },
    plugins: [createLogger()],
})
