const state = {
    list: []
};
const getters = {
    cartList: state => state.list
};
const actions = {
    cartGetList({commit}) {
        axios.get('/api/cart')
            .then(response => commit('cartSetList', response.data));
    },
    cartAddProduct({commit}, data) {
        axios.post(`/api/cart/${data.id}`, data)
            .then(response => commit('cartSetList', response.data));
    },
    cartUpdateProduct({commit}, data) {
        axios.put(`/api/cart/${data.id}`, data)
            .then(response => commit('cartSetList', response.data));
    },
    cartDeleteProduct({commit}, id) {
        axios.delete(`/api/cart/${id}`)
            .then(response => commit('cartSetList', response.data));
    },
};
const mutations = {
    cartSetList(state, data) {
        state.list = Object.values(data).reverse();
    },
    cartAddList(state, data) {
        state.list.push(data);
    },
};

export default {
    state,
    getters,
    actions,
    mutations
}
