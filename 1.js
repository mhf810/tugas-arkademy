function biodata() {
    let data = {
        name: 'M. Hauzan Fadlurrahman',
        age: 24,
        address: "Jl. Kramat Gg Bakti Cilandak Timur Jakarta Selatan",
        hobbies: ['programming', 'traveling', 'cycling', 'teaching'],
        married: false,
        list_school: {
            name: 'ITB',
            year_in: 2013,
            year_out: 2017,
            major: 'math',
        },
        skills: {
            html: 'intermediate',
            css: 'intermediate',
            javascript: 'basic',
            php: 'basic',
            python: 'basic',
            mysql: 'intermediate'
        },
        interest_in_coding: true
    }
    return JSON.stringify(data);
};

let json = biodata();

console.log(json);