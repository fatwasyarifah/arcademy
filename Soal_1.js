function getProfile() {
    return {
      name: 'Fatwa Syarifah',
      age: 25,
      address: 'Jl. Selajambe No.10 rt.01/rw.02, Sukaluyu - Cianjur',
      hobbies: ['Nonton', 'Main Games'], //Array,
      is_married: false, //Boolean,
      list_school: [{
        name: 'SDN Selajambe 1',
        year_in: '2000',
        year_out: '2006',
        major: null
      },{
        name: 'SMPN 2 Sukaluyu',
        year_in: '2006',
        year_out: '2009',
        major: null
      },{
        name: 'SMK Nurul Islam',
        year_in: '2009',
        year_out: '2012',
        major: "Rekayasa Perangkat Lunak"
      },{
        name: 'Universitas Komputer Indonesia',
        year_in: '2013',
        year_out: '2018',
        major: "Teknik Informatika"
      }], // Array Of Object
      skills: [{
        skill_name: 'SQL',
        level: "beginner"
      },{
        skill_name: 'Programmer',
        level: "beginner"
      }], // Array Of Object
      interest_in_coding: true //Boolean
    }
  }
  
  var profile = getProfile();
  console.log("name: " + profile.name);
  console.log("age: " + profile.age);
  console.log("address: " + profile.address);
  console.log("hobbies: " + profile.hobbies);
  console.log("married: " + profile.is_married);
  console.log("primary school: " + profile.list_school[0].name + ", " + profile.list_school[0].year_in + ", " + profile.list_school[0].year_out + ", " + profile.list_school[0].major);
  console.log("Junior high school: " + profile.list_school[1].name + ", " + profile.list_school[1].year_in + ", " + profile.list_school[1].year_out + ", " + profile.list_school[1].major);
  console.log("Senior high school: " + profile.list_school[2].name + ", " + profile.list_school[2].year_in + ", " + profile.list_school[2].year_out + ", " + profile.list_school[2].major);
  console.log("College: " + profile.list_school[3].name + ", " + profile.list_school[3].year_in + ", " + profile.list_school[3].year_out + ", " + profile.list_school[3].major);
  console.log("Skills: " + profile.skills[0].skill_name + " level " + profile.skills[0].level + ", " + profile.skills[1].skill_name + " level " + profile.skills[1].level);
  console.log("interest in coding: " + profile.interest_in_coding);