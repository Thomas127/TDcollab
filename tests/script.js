import {Selector} from 'testcafe';

fixture("TEST").page("https://github.com/Thomas127/TDcollab/blob/verif2/site/formulaire.html")
test("Test nom", async t=>{
    await t
    .typeText(Selector("#name"), "bob")
    .click("#submit")
    .expect(Selector("#verif").innerText).eql("BONJOUR BOB")
})
