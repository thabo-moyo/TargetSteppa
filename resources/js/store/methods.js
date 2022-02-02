import notificationEnums from "../Enums/notificationEnums";

export const addNotification = ({dispatch},type = notificationEnums.SUCCESS, title, message, duration ) =>{
    dispatch('notification/ADD_NOTIFICATION_ACTION',  {
        type: type,
        title: title,
        message: message,
        duration: duration
    }, {root: true})
}
