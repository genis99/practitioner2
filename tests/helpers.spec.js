const helpers = require ('../src/helpers')

test('suma function return 3 when we pass 2 and 1', function () {
    //Prepare (opcional)


    //Executar
    const resultat = helpers.suma(2,1)

    //comprovar/assert/expect
    expect(resultat).toBe(3)
})

//TDD -> Test Driven Development
Text('multiplice function return 50 when we pass 5 and 10', () => {
    helpers.multiple()
})

// test('suma function return 3 when we pass 2 and 1', () => {

// })

// const f1 = function () {

// }

// test('suma function return 3 when we pass 2 and 1', f1)