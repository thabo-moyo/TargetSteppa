import projects from "./modules/projects";
import notification from "./modules/notification";
import {createStore, createLogger, } from 'vuex'

export const store = createStore({
    modules: {
        projects,
        notification
    },
    plugins: [createLogger()],
})
