import pymysql.cursors

# Connect to the database
connection = pymysql.connect(host='localhost',
                             user='root',
                             password='root',
                             db='ETUDE',
                             port=8889,
                             charset='utf8mb4',
                             cursorclass=pymysql.cursors.DictCursor)

try:
    with connection.cursor() as cursor:
        # Create a new record
        for n in range(1,226):
            sql = "INSERT INTO appel (Nom, Prenom, Classe, Place, Etat, Image) VALUES ('Interne', 'Interne', 'Int', '"+str(n)+"', 'NOT', 0x89504e470d0a1a0a0000000d49484452000000e1000000e10803000000096d22480000007b504c5445ffffff000000949494c6c6c6f3f3f3fcfcfcf6f6f6eaeaeae6e6e6b9b9b9363636808080aaaaaac9c9c98f8f8fcdcdcd686868d8d8d8474747dfdfdfb1b1b1a6a6a65656562f2f2f2121219a9a9a1c1c1cbfbfbf383838626262707070dcdcdc4040401010108484844d4d4d4444445a5a5a14141429292979797934fef557000005bd49444154789ced9de162a23a10858b802050140514152bda6d7dff275cbdedee75cd04428024d8f3fd26dd390666269349f6e50500000000000000000000000000000000000000e009f1fc799a1593224be7bea7db98de59a587a575cff290bee936aa3f56f1daa258c72bdda6f5813b3b92f2be45ce5cdd0676c48d3635fa6e7c66a3d6b8a35fcf8779dce936531aef9780be1bf9485deb4c50df8d996e632570c316022deba2dbded64ccfad045ad679aadbe47678554b8196f531aa8fd16f8a11a4445fb7d9e2789f1202afa1713cb3b897126859c158827f2e29f01a18759b2ec6445aa06515ba8d1761de41a065cd759bdf8c2b928af2599bff29c67ceb37f929b56d3b3de535c124d62da0098f6bfa65eefc7dca49f8399de92163c1b17be23c3ce8f01cd2428bddc2241cab1ff5dd7038bf86d9f59b036973c6793a229f3e28b5b825f457c88f00746431f94b2c2883939a01e45b6d72d8a762a15d3bc22646048aac95e08d30b729be51f1d35c5f43bca4fba61cc50dc6f49a12c636e79984b7d92bb0550a97b5f52c308ca8e8989a9c12b351ef66be209c8da92b8c943555681c3b2c1dd852592e8ca527a17127669ca9d553b67a2156ca668be3a65633d8029458fec5e67ac741ed9487c9682a6a49c1e2548f03d7035b2ac99459b93786fb2fd8a0bf31b3c4ef6c1f0d5d0a8e5c3e0edc8a4dbe6a9e5f21fb960ad6b047f3963ebfa7f901d1e2f9233e9bb58542e3d8daa9d838f53c7fe64dac9e5e05868d68f544ac80452222130d05a75e07c4de6ff3241253781cdc5259a84a54e320e26731b712f5fcd544aad866d5f7e5ed8811065784e9aa7e9d631c5d559fde99e17b9b57f27993776638bb6b11e7e911eeae91bee64a494d8b57d20f1bdefccddbe52e9e65979bdfa9501dee3dcefc52f11e34fa2bbc51d36d629de328dda5515cd77b6a7cb7c90fe8187afeaeaf6e9d7b13ddc68bc189020294ba4d17c495eda015ac911b8027d3e66d595be303c5ff48b4ea5f23e688045e3396f6b3b831b392cfc5697da2646402afee86ad9ed671198d93b9e3d94f76bdf097470ce4e26a1cec440ecf7c8ef784e50d7a197f0faf00301e6a4f3a1f47fa013ef016d3228fb1c185d196b87e74f977ddb80ea3111dc613c5b7d328cbb228b59f501c00000000be713cdf5fad56beef8d6e3d5f8f97d859b8c8df83cdc777caf6b109def34598ede6634f6ebc5d563695a4366531337cc790c4594561ddaa8959668459329e57d7b3c3bc6aa1ee0f557e1a434a6e8754c78938c1c936b8eae667ef9dd4fde1bd30712add24ee3679ffb23f25664d65bff2be084e7507889532cdba6d6cf3596726f8d739afbfa41f169ab7bda7519ba027c731d277f8625ac8ed84b6653bd1a3715ad739d337b17a8d53b2d172400ac51a53b9fbcabab0517944c197bfcdab0b67656b902e2d41dd50d350b422ce4788b00d9679592e168bb2cc97017356518ca582696cb377fd1f551e4e6689e739f789a6eb785e329b84e7aaed9f1b7c3baed5ada44118cd1b6ffe9847975649add8197f595ce1142d28b346717724d142586639e0aac315f4a18b68d5de0a77951e2aa13f9f0f2751a40b681b27f2b1799ac4222e48e4c614299aaf76de17ddf7adfda2b9b5f1570f6a089a9ccc3aee6bc9fa766afa280739644a9d50ba63d1c6b134e2cee9b3297f19a007877f21e28da2ffae26a73eb7ef7ff55fd3c1b51f2a27ae6bc5e9fde009e742c42b67919b9264b1f9eebbef3a15cf8f0ede94c6fdcf077af6a79c135b4a9ad278ad71fd26e174c5e2a0a66bd2a1fd6abfe787c872bdba4537b9a079eff35fa04285d24be2fd0fc2823edf20e22c53a0b6323495bab1501cf663af546f0ff9acc23edd1c9b5ea83f82c55687fa3cf3cdfef521c33c0d7bbb449fbf3214aa000abb01852a80c26e40a10a542b14b9c4ab5fd89b5e865558bcda6a791d3673d4b763580714422114ea070aa1100af50385500885fa814228fc590a55b6748bd3e716e96b3c318f587d250500000000000000000000000000000000000000a09edf7d12521a72cb8d890000000049454e44ae426082)"
            cursor.execute(sql)
            connection.commit()
        sql = "INSERT INTO connexion (identifiant, passwd) VALUES ('prefecture', '$6$rounds=5000$usesomesillystri$j0t157R12mu0yqFeEWMrf6v74I4ErH1n.O3dqmK84rhh85mQCSDKV7nG0I96WOc8UhKJEput2FFLTw9z/thyn.')"
        cursor.execute(sql)
        connection.commit()
        sql = "INSERT INTO connexion (identifiant, passwd) VALUES ('surveillant', '$6$rounds=5000$usesomesillystri$2mh6/NClE5qlaDopJFju./PNea/GDwKAUOpRZJ87LxWZYnX4O3qzCjEtFMaEFoyjyA2CvKkuRrO3M0eMUw7931')"
        cursor.execute(sql)
        connection.commit()
finally:
    connection.close()
