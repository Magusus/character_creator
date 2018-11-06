<?php

use App\Profession;
use Illuminate\Database\Seeder;

class ProfessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professions')->delete();
        Profession::create([
            'name' => 'Bojovník',
            'experience_points' => 200,
            'attributes' => 5,
            
            'strength' => 2,
            'agility' => 1,
            'resistance' => 2,
            'mindfullness' => 1,
            'intelligence' => -2,
            'wisdom' => -2,
            'intuition' => 1,
            'charisma' => -1,
            
            'description' => "Bojovníky najdete po celém světě v kterékoliv bitvě nebo družině dobrodruhů. Tvoří základ každé družiny, ať už jako neohrožení vůdci a lovci pokladů nebo neporazitelné stroje na zabíjení. Většinou se jedná o zachmuřené muže či ženy, kteří ale dokáží vyprávět podivuhodné příběhy, když se jim zachce."
        ]);
        Profession::create([
            'name' => 'Lučištník',
            'experience_points' => 210,
            'attributes' => 4,
            
            'strength' => 0,
            'agility' => 1,
            'resistance' => 0,
            'mindfullness' => 2,
            'intelligence' => -1,
            'wisdom' => -1,
            'charisma' => 0,
            
            'description' => "K povolání lukostřelce netřeba nic dodávat, snad jenom to, že se vždy nejedná o ty, kteří stojí v druhé linii. Například v některých zemích jsou jednotky lukostřelců cvičeny i v boji na blízko. Střelci občas trpí dalekozrakostí, ale jinak mívají výborný zrak."
        ]);
        Profession::create([
            'name' => 'Šermíř',
            'experience_points' => 240,
            'attributes' => 4,
            
            'strength' => 0,
            'agility' => 3,
            'resistance' => -1,
            'mindfullness' => 2,
            'intelligence' => -1,
            'wisdom' => -1,
            'charisma' => -1,
            
            'description' => "Tito šermíři neodpovídají představě armádních těžce ozbrojených šermířských jednotek, ale jsou naprostým opakem. Jsou to ďábelsky rychlí zabijáci schopní bojovat oběma rukama stejně a pokud se jim do rukou dostanou scimitary nebo podobné zbraně, jsou schopni porazit i mnohonásobně větší přesilu."
        ]);
        Profession::create([
            'name' => 'Válečník',
            'experience_points' => 180,
            'attributes' => 5,
            
            'strength' => 3,
            'agility' => -1,
            'resistance' => 3,
            'mindfullness' => -1,
            'intelligence' => -1,
            'wisdom' => -1,
            'charisma' => -1,
            
            'description' => "Tito šermíři neodpovídají představě armádních těžce ozbrojených šermířských jednotek, ale jsou naprostým opakem. Jsou to ďábelsky rychlí zabijáci schopní bojovat oběma rukama stejně a pokud se jim do rukou dostanou scimitary nebo podobné zbraně, jsou schopni porazit i mnohonásobně větší přesilu."
        ]);
        Profession::create([
            'name' => 'Gladiátor',
            'experience_points' => 220,
            'attributes' => 5,
            
            'strength' => 1,
            'agility' => 1,
            'resistance' => 1,
            'mindfullness' => 1,
            'intelligence' => -1,
            'wisdom' => -1,
            'charisma' => -1,
            
            'description' => "I když čím dál tím řidšeji, stále se dají najít arény, kde spolu svádějí gladiátoři kruté boje. Jsou schopni bojovat takřka se vším proti čemukoliv. Mnoho přeživších nebo neúspěšných gladiátorů se stává dobrodruhy nebo žoldnéry."
        ]);
        Profession::create([
            'name' => 'Lovec',
            'experience_points' => 230,
            'attributes' => 4,
            
            'strength' => 0,
            'agility' => 2,
            'resistance' => 1,
            'mindfullness' => 1,
            'intelligence' => -1,
            'wisdom' => -1,
            'charisma' => -1,
            
            'description' => "Lovci jsou na první pohled podobní hraničářům, ale ve skutečnosti mají společnou jen oblibu luku, se kterým dokáží neuvěřitelné kousky. Lovci ale trofeje a kořist prodávají ve městech, kam většinou zavítají jen několikrát do roka."
        ]);
        Profession::create([
            'name' => 'Chodec',
            'experience_points' => 250,
            'attributes' => 4,
            
            'strength' => -1,
            'agility' => 0,
            'resistance' => 2,
            'mindfullness' => 2,
            'intelligence' => 1,
            'wisdom' => -1,
            'charisma' => -2,
            
            'description' => "Také příbuzní hraničářů, tentokrát bližší. Z větší části se jedná o psance nebo zločince prchající před spravedlností. Bývají to temní poutníci, kteří dovedou podivné věci, občas i kouzlit. Bývají přijati spíše nepřátelsky, hlavně pokud zavítají do menší vesnice."
        ]);
        
        //Magic professions
        Profession::create([
            'name' => 'Kouzelník',
            'experience_points' => 270,
            'attributes' => 3,
            
            'strength' => -2,
            'agility' => 1,
            'resistance' => -1,
            'mindfullness' => 0,
            'intelligence' => 2,
            'wisdom' => 1,
            'charisma' => 0,
            
            'description' => "Také příbuzní hraničářů, tentokrát bližší. Z větší části se jedná o psance nebo zločince prchající před spravedlností. Bývají to temní poutníci, kteří dovedou podivné věci, občas i kouzlit. Bývají přijati spíše nepřátelsky, hlavně pokud zavítají do menší vesnice."
        ]);
        Profession::create([
            'name' => 'Mág ohně',
            'experience_points' => 290,
            'attributes' => 2,
            
            'strength' => -2,
            'agility' => 0,
            'resistance' => -2,
            'mindfullness' => 0,
            'intelligence' => 3,
            'wisdom' => 2,
            'charisma' => 1,
            
            'description' => "První a nejstarší odrůda klasických mágů. Převzali moc boha ohně a používají jí ke svému prospěchu. Zpravidla se chovají povýšeně a hrdě, což ale neplatí o studentech magie, kteří vedou spíše bohémský život. Živel ohně je bouřlivý a bezohledný, takže se mezi mágy těší velké oblibě."
        ]);
        Profession::create([
            'name' => 'Mág vody',
            'experience_points' => 290,
            'attributes' => 2,
            
            'strength' => -3,
            'agility' => 0,
            'resistance' => -2,
            'mindfullness' => 0,
            'intelligence' => 3,
            'wisdom' => 3,
            'charisma' => 1,
            
            'description' => "První a nejstarší odrůda klasických mágů. Převzali moc boha ohně a používají jí ke svému prospěchu. Zpravidla se chovají povýšeně a hrdě, což ale neplatí o studentech magie, kteří vedou spíše bohémský život. Živel ohně je bouřlivý a bezohledný, takže se mezi mágy těší velké oblibě."
        ]);
        Profession::create([
            'name' => 'Mág vzduchu',
            'experience_points' => 270,
            'attributes' => 2,
            
            'strength' => -3,
            'agility' => 1,
            'resistance' => -2,
            'mindfullness' => 0,
            'intelligence' => 3,
            'wisdom' => 2,
            'charisma' => 1,
            
            'description' => "Vzduch je nejméně populárním elementem základní magie. Kvůli své nespoutanosti a nevypočitatelnosti se stalo s příchodem mocnějších zaklínadel nemožným ho stoprocentně ovládat, což občas vede k tragickým nehodám, hlavně při sesílání bojových kouzel."
        ]);
        Profession::create([
            'name' => 'Mág mysli',
            'experience_points' => 300,
            'attributes' => 2,
            
            'strength' => -3,
            'agility' => 0,
            'resistance' => -2,
            'mindfullness' => 0,
            'intelligence' => 3,
            'wisdom' => 3,
            'charisma' => 1,
            
            'description' => "Mysl je nejtajemnějším a také nejméně prozkoumaným elementem základní magie. Její mágové proto na univerzitách studují jedenáct, místo obvyklých deseti let. Zvládnutí magie mysli vyžaduje především naprostou sebekontrolu a obrovské odhodlání. "
        ]);
        Profession::create([
            'name' => 'Nekromancer',
            'experience_points' => 280,
            'attributes' => 2,
            
            'strength' => -3,
            'agility' => 1,
            'resistance' => -2,
            'mindfullness' => 0,
            'intelligence' => 3,
            'wisdom' => 3,
            'charisma' => -1,
            
            'description' => "Magie probouzející mrtvé byla radou mágů zakázána už před řadou let, ale od té doby počet nekromantů narostl i přes kruté pronásledování. Někteří z mocných nekromancerů si dokonce vytvořili svou vlastní říši, odkud vládnou armádou nemrtvých. Jejich magie čerpá sílu ze smrti a využívá ji ke svému prospěchu. Mocní nekromanceři se dokonce proměnou v licha stali téměř nesmrtelnými."
        ]);
        Profession::create([
            'name' => 'Thaumaturg',
            'experience_points' => 250,
            'attributes' => 2,
            
            'strength' => -3,
            'agility' => 1,
            'resistance' => -2,
            'mindfullness' => 0,
            'intelligence' => 3,
            'wisdom' => 2,
            'charisma' => 1,
            
            'description' => ""
        ]);
        Profession::create([
            'name' => 'Zaklínač',
            'experience_points' => 270,
            'attributes' => 3,
            
            'strength' => -2,
            'agility' => 0,
            'resistance' => -2,
            'mindfullness' => 0,
            'intelligence' => 2,
            'wisdom' => 3,
            'charisma' => 0,
            
            'description' => "Zaklínači se v mnohém podobají kouzelníkům, hlavně tím, že mají k magii mnohem jednodušší přístup, než mágové nebo thaumaturgové. K sesílání kouzel používají energii, kterou v sobě probudí pomocí slov z archaické tredosštiny, kterou někteří z nich umí i plynně hovořit. Umění zaklínačů se dědí jako u kouzelníků z mistra na učně."
        ]);
        Profession::create([
            'name' => 'Oldegik',
            'experience_points' => 280,
            'attributes' => 2,
            
            'strength' => -3,
            'agility' => 1,
            'resistance' => -2,
            'mindfullness' => 0,
            'intelligence' => 3,
            'wisdom' => 3,
            'charisma' => -1,
            
            'description' => "Další druh magiků, kteří jsou všeobecně zavrhováni a nemilosrdně pronásledováni. Oldegové jsou totiž schopni ovládat duše a mysli ostatních živých tvorů a k tomu i přenášet do svých služeb tvory z jiných sfér. Ti z mocnějších oldegiků jsou také schopni proniknout do nejhlubších tajů nekromancie, jako je proměna v licha."
        ]);
        
        //Criminal professions
        Profession::create([
            'name' => 'Zloděj',
            'experience_points' => 180,
            'attributes' => 4,
            
            'strength' => -2,
            'agility' => 3,
            'resistance' => -2,
            'mindfullness' => 2,
            'intelligence' => -1,
            'wisdom' => 0,
            'charisma' => 0,
            
            'description' => "Zlodějina je velice populárním povoláním snad na všech světech a ve všech říších. Zloději se dají dále rozdělovat do mnoha profesí a specializací, ale to hlavní mají společné. Jejich cílem je přivlastnit si co nejvíce z majetku někoho jiného. Většinou vystupují na venek jako neúspěšní obchodníci nebo učedníci a sluhové."
        ]);
        Profession::create([
            'name' => 'Sailin',
            'experience_points' => 230,
            'attributes' => 3,
            
            'strength' => -2,
            'agility' => 2,
            'resistance' => -2,
            'mindfullness' => 2,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 0,
            
            'description' => "Sailinové se věnují magickému zlodějství. Od vykrádání měšců telekinezí až po odemykání zámků magií, všechny zlodějské profese dokáží bez problému provozovat tak, jak se o tom obyčejným zlodějům ani nesnilo. Mezi zlodějskými cechy jsou velmi výtáni, mágové na ně ale vypisují odměny a jakýkoliv sailin by se od nich měl držet dál."
        ]);
        Profession::create([
            'name' => 'Vrah',
            'experience_points' => 200,
            'attributes' => 3,
            
            'strength' => -1,
            'agility' => 2,
            'resistance' => -3,
            'mindfullness' => 2,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 0,
            
            'description' => "Sailinové se věnují magickému zlodějství. Od vykrádání měšců telekinezí až po odemykání zámků magií, všechny zlodějské profese dokáží bez problému provozovat tak, jak se o tom obyčejným zlodějům ani nesnilo. Mezi zlodějskými cechy jsou velmi výtáni, mágové na ně ale vypisují odměny a jakýkoliv sailin by se od nich měl držet dál."
        ]);
        Profession::create([
            'name' => 'Stínový bojovník',
            'experience_points' => 230,
            'attributes' => 3,
            
            'strength' => -2,
            'agility' => 3,
            'resistance' => -2,
            'mindfullness' => 2,
            'intelligence' => -1,
            'wisdom' => 0,
            'charisma' => 0,
            
            'description' => "V podstatě se jedná o vraha, který většinou nezabíjí pro peníze, ale je naprosto nezávislý a někdy se dokonce dá na dráhu dobrodruha. Jejich cíle většinou nejsou jasné nikomu kromě jich samotných a tak jsou všeobecně považováni za velmi nedůvěryhodné."
        ]);
        
        //Adventurers
        Profession::create([
            'name' => 'Hraničář',
            'experience_points' => 240,
            'attributes' => 3,
            
            'strength' => 1,
            'agility' => 1,
            'resistance' => 1,
            'mindfullness' => 1,
            'intelligence' => -1,
            'wisdom' => 1,
            'charisma' => -1,
            
            'description' => "Hraničáři jsou všeobecně považováni za temné a mlčenlivé poutníky, ale to platí jenom o některých z nich. Všeobecně jsou to ale samotáři nebo ti, kdož mají raději přírodu a klid než ruch měst a velkých říši. Když se jim zachce, dokáží být ale výbornými vypravěči a společníky."
        ]);
        Profession::create([
            'name' => 'Dobrodruh',
            'experience_points' => 220,
            'attributes' => 4,
            
            'strength' => 0,
            'agility' => 0,
            'resistance' => 1,
            'mindfullness' => 0,
            'intelligence' => 1,
            'wisdom' => -1,
            'charisma' => 0,
            
            'description' => "Dobrodruhem se v podstatě stává každý, kdo vymění pohodlný a jistý život ve městě nebo na vesnici za nejistou budoucnost v cizích zemích nebo v divočině. V družině dobrodruhů najdete nejrůznější existence, od umělců a básníků, přes studenty, až po trestance a psance."
        ]);
        Profession::create([
            'name' => 'Bard',
            'experience_points' => 200,
            'attributes' => 3,
            
            'strength' => -1,
            'agility' => 2,
            'resistance' => -1,
            'mindfullness' => 0,
            'intelligence' => 1,
            'wisdom' => -2,
            'charisma' => 2,
            
            'description' => "Jedná se o povolání příbuzné s dobrodruhem. Bardi jsou zpěváci a současně skladatelé písní a příběhů, takže jsou všude vítáni, i když nejsou považováni za nijak důvěryhodné. Velice často bardi vyrážejí za dobrodružstvím, ale vždy s družinou několika přátel."
        ]);
        
        //Paladins and priests
        Profession::create([
            'name' => 'Irtanhelův paladin',
            'experience_points' => 250,
            'attributes' => 4,
            
            'strength' => 0,
            'agility' => -1,
            'resistance' => 1,
            'mindfullness' => -1,
            'intelligence' => 1,
            'wisdom' => 1,
            'charisma' => 1,
            
            'description' => "Klasický paladin bojující za spravedlnost a slávu svého řádu je právě paladinem boha cti a pravdy irtanhela. Tento řád se nachází po celém světě a jeho členové jsou vždy připraveni chránit ostatní a nasadit vlastní život v boji proti silám zla a temnoty. I přesto, že řád je občas napadán služebníky jiných bohů a označován za mocichtivý spolek, těší se důvěře a podpoře mnoha říší i prostých obyvatel."
        ]);
        Profession::create([
            'name' => 'Mirthusův paladin',
            'experience_points' => 250,
            'attributes' => 4,
            
            'strength' => 2,
            'agility' => 1,
            'resistance' => 2,
            'mindfullness' => 0,
            'intelligence' => 0,
            'wisdom' => -1,
            'charisma' => -1,
            
            'description' => "Mirthus, bůh války a dobrodruhů, získal svůj řád relativně nedávno. Jeho příslušníci jsou vlastně válečníci bojující na všech bitevních polích světa proti silám Baala a jeho temných služebníků. Nejsou nijak oblíbení, ale znají mnoho neuvěřitelných příběhů a legend."
        ]);
        Profession::create([
            'name' => 'Glaedrusův paladin',
            'experience_points' => 250,
            'attributes' => 3,
            
            'strength' => -1,
            'agility' => 0,
            'resistance' => -1,
            'mindfullness' => 0,
            'intelligence' => 1,
            'wisdom' => 2,
            'charisma' => 1,
            
            'description' => "Bojovník – mág, to je služebník boha Glaedra, boha magie. Řád se v posledních desetiletích těší velké oblibě a díky dobrým vztahům a vzájemnému vypomáhání s řádem irtanhelových paladinů získal i podporu od vládců několika mocných říší."
        ]);
        Profession::create([
            'name' => 'Temnonoš',
            'experience_points' => 250,
            'attributes' => 4,
            
            'strength' => 0,
            'agility' => 1,
            'resistance' => 0,
            'mindfullness' => 2,
            'intelligence' => 0,
            'wisdom' => 1,
            'charisma' => -1,
            
            'description' => "Temnonoši jsou pravým opakem irtanhelových paladinů. Jsou to služebníci boha tyranie Baala, jejichž motivy zůstávají většinou zahaleny rouškou temných tajemství. Neví se o nich mnoho, jen to, že mají na svědomí mnoho mrtvých či záhadně zmizelých. "
        ]);
        Profession::create([
            'name' => 'Paladin chaosu',
            'experience_points' => 250,
            'attributes' => 4,
            
            'strength' => 3,
            'agility' => -1,
            'resistance' => 2,
            'mindfullness' => 1,
            'intelligence' => -1,
            'wisdom' => 0,
            'charisma' => -1,
            
            'description' => "Další ze služebníků Temné trojice, tentokrát boha ohně a chaosu Eflehriga. Není úplně jisté, o co těmto paladinům vlastně jde, jisté ale je, že vedou válku s glaedrovými paladiny a spolupracují s temnonoši."
        ]);
        Profession::create([
            'name' => 'Smrtonoš',
            'experience_points' => 250,
            'attributes' => 4,
            
            'strength' => 0,
            'agility' => 1,
            'resistance' => 0,
            'mindfullness' => 1,
            'intelligence' => 2,
            'wisdom' => 1,
            'charisma' => -1,
            
            'description' => "Toto je služebník boha smrti, Řádu. Většinou bývá zasvěcen v chrámu, který se nachází na místě, kam rozhodně není snadné se dostat, hlavně uprostřed pouště nebo dokonce pod vodou. Jeho úkol je jasný – zabít ty, kteří smrti nějakým způsobem unikli a za to získat dlouhověkost nebo dokonce podobu licha."
        ]);
        Profession::create([
            'name' => 'Ldorthina kněžka',
            'experience_points' => 250,
            'attributes' => 3,
            
            'strength' => -2,
            'agility' => 1,
            'resistance' => -1,
            'mindfullness' => 1,
            'intelligence' => 2,
            'wisdom' => 0,
            'charisma' => 0,
            
            'description' => "Kněžky bohyně utrpení Ldorth šíří víru po světě především utrpením nevěřících. Ve své domovině, v Podříši, jsou velmi vážené a nikdo se neodvažuje zpochybnit jejich rozhodnutí. Jsou to schopné kouzelnice i bojovnice na blízko, ale téměř vždy se jedná o noční tredosky."
        ]);
        Profession::create([
            'name' => 'Selinina kněžka',
            'experience_points' => 150,
            'attributes' => 3,
            
            'strength' => -2,
            'agility' => 1,
            'resistance' => -1,
            'mindfullness' => 1,
            'intelligence' => 0,
            'wisdom' => 2,
            'charisma' => 2,
            
            'description' => "Řád Selininých kněžek sloužící Selině, bohyni lásky a milosrdenství, je paradoxně dobře znám hlavně u armád. Tam, hlavně mezi vojáky znechucenými krveprolitím, šíří slova lásky a především jsou to výborné léčitelky. Zásadně odmítají zbraně a zbroj, některé jsou ale praktičtěji založené a tak v bitevní vřavě nějakou tu zbroj nosí."
        ]);
    }
}
