const _ = ele => document.querySelector(ele);
const __ = ele => document.querySelectorAll(ele);

const select = __('select[name="order_status"]');

select.forEach(s => {
    //change color
    switch (s.value.toLowerCase()) {
        case 'pending':
            s.style.backgroundColor = 'white';
            s.style.color = 'black';
            break;
        case 'assigned':
            s.style.backgroundColor = 'blue'
            s.style.color = 'white';
            break;
        case 'on-route':
            s.style.backgroundColor = 'gold'
            s.style.color = 'white';
            break;
        case 'done':
            s.style.backgroundColor = 'green'
            s.style.color = 'white';
            break;
        case 'cancelled':
            s.style.backgroundColor = 'tomato'
            s.style.color = 'white';
            break;
        default:
            break;
    }
})

