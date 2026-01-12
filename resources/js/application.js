import { createApplication, getPendingApplications } from "./api/application";

export const submitApplication = async (e) => {

    e.preventDefault();

    const formData = Object.fromEntries([
        'first_name',
        'last_name',
        'email',
        'student_id_number',
        'password',
        'password_confirmation'
    ].map(id => [id, document.getElementById(id).value]))

    try {
        await createApplication(formData)
    } catch (error) {
        return error
    }
}
