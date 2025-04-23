import {Selector} from 'testcafe';

fixture("TEST").page("http://127.0.0.1:8000/testcafe/index.html")
test("Test nom", async t=>{
    await t
    .typeText(Selector("#name"), "bob")
    .click("#submit")
    .expect(Selector("#verif").innerText).eql("BONJOUR BOB")
})
