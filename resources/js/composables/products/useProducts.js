import {ref} from "vue";

export function useProducts () {
    const products = ref([]);
    const orderBy = ref(null);
    const direction = ref('desc');

    const getProducts = async () => {
        try {
            let { data } = await axios.get('/api/products', {
                params: {
                    orderBy: orderBy.value,
                    direction: direction.value,
                }
            });

            products.value = data.products;
        } catch(err) {
            console.log(err);
        }
    }

    const toggleDirection = () => direction.value = direction.value === 'asc' ? 'desc' : 'asc';

    const toggleOrder = async (criteria) => {
        orderBy.value = criteria;

        toggleDirection();

        await getProducts();
    }

    return {
        products,
        getProducts,
        toggleOrder,
        orderBy,
    }
}
