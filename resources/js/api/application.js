import apiClient from "../axios"

export const createApplication = async (formData) => {
    try {
        const res = await apiClient.post(`/api/create-application`, formData);
        return res.data;
    } catch (error) {
        throw error.response?.data || error;
    }
};


export const getPendingApplications = async (page = 1) => {
    try {
        const res = await apiClient.get(`/api/application-list/pending?page=${page}`)
        return res.data
    } catch (error) {
        throw error.response?.data || error; 
    }
}
