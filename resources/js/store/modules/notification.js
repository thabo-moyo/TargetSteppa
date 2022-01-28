import notificationEnums from "../../Enums/notificationEnums";
let nextId = 1 //Make sure every notification has an ID

export default {
    namespaced: true,
    state: () => ({
        notifications: []
    }),
    mutations: {
        ADD_NOTIFICATION(state, notification) {
            state.notifications.push({
                ...notification, //args
                id: nextId++ //Unique id each time a notification is added
            })
        },
        DELETE_NOTIFICATION(state, notificationToRemove) {
            state.notifications = state.notifications.filter(
                notification => notification.id === notificationToRemove.id
            )
        }
    },
    actions: {
        ADD_NOTIFICATION_ACTION({ commit, dispatch }, notification) {
            commit('ADD_NOTIFICATION', notification);
            setTimeout(() => {
                //dispatch('DELETE_NOTIFICATION_ACTION', notification);
            }, notification.duration ?? 5000)
            clearTimeout();
        },
        DELETE_NOTIFICATION_ACTION({ commit }, notificationToRemove) {
            commit('DELETE_NOTIFICATION', notificationToRemove);
        }
    }
}
