import axios from 'axios';

const base = axios.create({
    //baseURL: `${process.env.APP_URL}/api`,
    baseURL: `/api`,
    headers: {'Content-Type': 'application/json'}
})
export default {
    getProjects: (user_id = 1) => {
        return base.get(`/projects`)
    }
}
