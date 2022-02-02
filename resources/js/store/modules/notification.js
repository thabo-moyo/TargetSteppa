import notificationEnums from "../../Enums/notificationEnums";
let nextId = 1 //Make sure every notification has an ID

export default {
    namespaced: true,
    state: () => ({
        notifications: []
    }),
    mutations: {
        ADD_NOTIFICATION(state, newNotification) {
            state.notifications.push({
                ...newNotification //args
            })
        },
        DELETE_NOTIFICATION(state, notificationToRemove) {
            console.log('id: ' + notificationToRemove.id, 'title:' + notificationToRemove.title)
            state.notifications = state.notifications.filter(
                notification => notification.id === notificationToRemove.id
            )
        }
    },
    actions: {
        ADD_NOTIFICATION_ACTION({ commit, dispatch }, newNotification) {
            newNotification.id = nextId++
            console.log('id: ' + newNotification.id, 'title:' + newNotification.title)
            commit('ADD_NOTIFICATION', newNotification);
            setTimeout(() => {
               // commit('DELETE_NOTIFICATION',newNotification)
            }, newNotification.duration ?? 5000)
            clearTimeout();
        },
        DELETE_NOTIFICATION_ACTION({ commit }, notificationToRemove) {
            commit('notification/DELETE_NOTIFICATION', notificationToRemove);
        }
    },
    getters: {
        getNotifications: state => {
            return state.notifications
        }
    }
}
