import { getPendingApplications } from "./api/application";

const fetchPendingApplications = async (page = 1) => {
    try {
        const data = await getPendingApplications(page)
        //console.log('this is the data', data.data)
        updateTable(data.data);
        updatePagination(data);
    } catch (error) {
        console.error('Failed to load pending applications:', error);
    }
}

const updateTable = (applications) => {
    const tbody = document.querySelector('#application-table tbody');
    tbody.innerHTML = applications.map(app => `
        <tr class="table-row">
            <td>${app.first_name}</td>
            <td>${app.last_name}</td>
            <td>${app.email}</td>
            <td>${app.student_id_number}</td>
            <td>${new Date(app.created_at).toLocaleDateString()}</td>
        </tr>
    `).join('');
};


const updatePagination = (paginator) => {
    document.getElementById('pagination').innerHTML = `
        <div class="flex justify-between items-center mt-6 p-4 bg-gray-50 rounded-lg">
            <button onclick="loadPendingApplications(${paginator.current_page - 1})"
                    class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 disabled:bg-gray-400 ${paginator.current_page == 1 ? 'opacity-50 cursor-not-allowed' : ''}"
                    ${paginator.current_page == 1 ? 'disabled' : ''}>
                Previous
            </button>

            <span class="font-semibold text-gray-700">
                Page ${paginator.current_page} of ${paginator.last_page}
                (${paginator.from}-${paginator.to} of ${paginator.total})
            </span>

            <button onclick="loadPendingApplications(${paginator.current_page + 1})"
                    class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 disabled:bg-gray-400 ${paginator.current_page >= paginator.last_page ? 'opacity-50 cursor-not-allowed' : ''}"
                    ${paginator.current_page >= paginator.last_page ? 'disabled' : ''}>
                Next
            </button>
        </div>
    `;
};

fetchPendingApplications()
