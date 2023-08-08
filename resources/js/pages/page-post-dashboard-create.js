import CategorySource from "../data/category-source";

const createOptionElem = (val, text) => {
    const option = document.createElement('option');
    option.setAttribute('value', val);
    option.textContent = text;

    return option;
}

const handleSelectCategory = async () => {
    const categoryElem = document.querySelector('#category');
    const categorySource = new CategorySource();
    const oldValue = categoryElem.dataset.oldValue;

    try {
        let categories = await categorySource.list();
        categories.forEach((category) => {
            const option = createOptionElem(category.id, category.name);

            if (oldValue == category.id) {
                option.setAttribute('selected', '')
            }

            categoryElem.appendChild(option);
        })
    } catch (error) {
        //TODO: add error mesasge to select category
        alert(error);
    }
}

window.addEventListener('DOMContentLoaded', () => {
    handleSelectCategory();
});
