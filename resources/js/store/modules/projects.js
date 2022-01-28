import projectsApi from "../../../api/projects-api";
import {mapActions} from "vuex";
import notificationEnums from "../../Enums/notificationEnums";

export default {
    state: () => ({
        projects: {},
    }),
    mutations: {
        ADD_PROJECTS(state, payload) {
            state.projects = payload;
        },
    },
    actions: {
        apiProjects({commit, dispatch}) {
            return projectsApi.getProjects()
                .then((response) => {
                    commit('ADD_PROJECTS', response.data)
                    dispatch('notification/ADD_NOTIFICATION_ACTION',  {
                        type: notificationEnums.SUCCESS,
                        message: 'Successfully received all projects',
                        duration: 5000
                    }, {root: true})
                })
                .catch((e) => {
                    dispatch('notification/ADD_NOTIFICATION_ACTION',  {
                        type: notificationEnums.FAIL,
                        message: 'Failed to fetch projects',
                        duration: 5000
                    }, {root: true})
                });
        }
    },
    getters: {
        getProjects(state) {
            return state.projects;
        }
    },
}
