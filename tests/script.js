import {Selector} from 'testcafe';

fixture("TEST").page("http://localhost:8080/site/formulaire.html")
test("Test nom", async t=>{
    await t
    .typeText(Selector("#name"), "bob")
    .click("#submit")
    .expect(Selector("#verif").innerText).eql("BONJOUR BOB")
})
