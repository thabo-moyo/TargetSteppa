import projectsApi from "../../../api/projects-api";
import {mapActions} from "vuex";

export default {
    state: () => ({
        projects: {},
    }),
    mutations: {
        setProjects(state, payload) {
            state.projects = payload;
        },
    },
    actions: {
        async apiProjects({commit}) {
            const response = await projectsApi.getProjects();
            commit('setProjects', await response.data)
        }
    },
    getters: {
        getProjects(state) {
            return state.projects;
        }
    },
}
