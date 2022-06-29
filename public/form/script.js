document.addEventListener('DOMContentLoaded', () => {

    document.querySelector('form').addEventListener('submit', event => {
        event.preventDefault()
        const creditAmount = document.querySelector('input[name="creditAmount"]').value
        const numberOfMonths = document.querySelector('input[name="numberОfMonths"]').value

        let amountOfPayment = creditAmount/numberOfMonths

        document.querySelector('div[id="resultCalculation"]').innerHTML = "Сумма платежа: " + amountOfPayment.toFixed(2)
    })
})