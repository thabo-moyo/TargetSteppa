import projectsApi from "../../../api/projects-api";
import {mapActions} from "vuex";
import notificationEnums from "../../Enums/notificationEnums";
import notification from "./notification";
import {addNotification} from "../methods";

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
                    new Promise( resolve => setTimeout(resolve, 3000))
                    commit('ADD_PROJECTS', response.data)
                    dispatch('notification/ADD_NOTIFICATION_ACTION',  {
                        type: notificationEnums.SUCCESS,
                        title: 'TESTING1',
                        message: 'better work',
                        duration: 2000
                    }, {root: true})

                    dispatch('notification/ADD_NOTIFICATION_ACTION',  {
                        type: notificationEnums.SUCCESS,
                        title: 'TESTING2',
                        message: 'better work',
                        duration: 5000
                    }, {root: true})

                })
        }
    },
    getters: {
        getProjects(state) {
            return state.projects;
        }
    },
}
