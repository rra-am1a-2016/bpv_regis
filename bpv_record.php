<form class="form-bpv">
        <h2 class="form-bpv-heading">Invoer BPV bedrijf</h2>

        <label for="nameCompany" class="sr-only">Naam van het bedrijf</label>
        <input type="text" 
               id="nameCompany" 
               class="form-control" 
               placeholder="Naam van het bedrijf"
               value="Bissmark"
               required 
               autofocus>

        <label for="phoneNumberCompany" class="sr-only">Telefoon vast</label>
        <input type="text" 
               id="phoneNumberCompany" 
               class="form-control" 
               placeholder="Telefoonnr vast"
               value="030-5257021"
               required>

        <label for="nameContact" class="sr-only">Contact persoon</label>
        <input type="text" 
               id="nameContact" 
               class="form-control" 
               placeholder="Naam contactpersoon"
               value="Peter Beense"
               required>

        <label for="mobilePhoneNumber" class="sr-only">Mobiele telefoonnummer</label>
        <input type="text" 
               id="mobilePhoneNumber" 
               class="form-control" 
               placeholder="Mobiele telefoonnummer"
               value="+31 6 25403121"
               required>

        <label for="address" class="sr-only">Straatnaam</label>
        <input type="text" 
               id="address" 
               class="form-control" 
               placeholder="Straatnaam"
               value="Vreeswijksestraatweg"
               required>

        <label for="addressNumber" class="sr-only">Huisnummer</label>
        <input type="text" 
               id="addressNumber" 
               class="form-control" 
               placeholder="Hs-nr."
               value="42"
               required>
        
        <label for="city" class="sr-only">Woonplaats</label>
        <input type="text" 
               id="city" 
               class="form-control" 
               placeholder="Woonplaats"
               value="Oudegein"
               required>

        <label for="postalCode" class="sr-only">Postcode</label>
        <input type="text" 
               id="postalCode" 
               class="form-control" 
               placeholder="postcode"
               value="1903 CB"
               required>

        <label for="urlCompany" class="sr-only">URL website BPV-bedrijf</label>
        <input type="url" 
               id="urlCompany" 
               class="form-control" 
               placeholder="URL website BPV-bedrijf"
               value="info@bissmark.nl"
               required>


        <label for="emailContact" class="sr-only">E-mailadres contactpersoon</label>
        <input type="email" 
               id="emailContact" 
               class="form-control" 
               placeholder="e-mailadres contactpersoon"
               value="pbeens@bissmark.nl"
               <required></required>

        <label for="description" class="sr-only">Korte omschrijving</label>
        <textarea id="description" 
                  class="form-control"
                  placeholder="Korte omschrijving van de verwachte werkzaamheden">Ik moet programmeren in C.</textarea>
        <div class="alert alert-success" role="alert" id="succes_record_saved">
          De informatie is succesvol opgeslagen.
          <a href="#" class="alert-link">...</a>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="btn_bpv">Sla op!</button>
        
</form>

<div class="alert alert-danger" role="alert" id="error_record_not_saved">
  Er is een fout opgetreden, neem contact op met de beheerder.
  <a href="#" class="alert-link">...</a>
</div>
