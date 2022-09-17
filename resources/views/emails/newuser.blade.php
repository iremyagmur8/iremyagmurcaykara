<p>
    {{config()->get("solaris.site.name")}} iletişim sayfasından mesaj aldınız.
</p>


<p>
    <b>Ad : </b>  {{request("name")}}
</p>

<p>
    <b>Mesaj : </b>  {{request("subject")}}
</p>
