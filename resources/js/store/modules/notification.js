let nextId = 0;

export default {
    namespaced: true,
    state: () => ({
        notifications: []
    }),
    mutations: {
        ADD_NOTIFICATION(state, newNotification) {
            state.notifications.forEach(notification => {
                if(notification.message === newNotification.message){
                    newNotification = undefined;
                }
            })
            if (newNotification !== undefined){
                state.notifications.push({
                    ...newNotification //args
                })
            }
        },
        DELETE_NOTIFICATION(state, notificationToRemove) {
            state.notifications = state.notifications.filter(
                notification => notification.id !== notificationToRemove.id
            )
        }
    },
    actions: {
        ADD_NOTIFICATION_ACTION({commit, dispatch}, newNotification) {
            let id = nextId;
            commit('ADD_NOTIFICATION', {
                id: nextId++,
                message: newNotification.message,
                type: newNotification.type ?? 'success',
                hasDownload: newNotification.hasDownload ?? false,
                downloadButtonText: newNotification.downloadButtonText ?? null,
                downloadUrl: newNotification.downloadUrl ?? null,
            });
            setTimeout(() => {
                    commit('DELETE_NOTIFICATION', {id: id})
            }, newNotification.duration ?? 5000)
            clearTimeout();
        },
        DELETE_NOTIFICATION_ACTION({commit}, notificationToRemove) {
            commit('DELETE_NOTIFICATION', notificationToRemove);
        }
    },
    getters: {
        getNotifications: state => state.notifications
    }
}
