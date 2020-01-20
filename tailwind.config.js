module.exports = {
    theme: {
        extend: {
            spacing: {
                '2px': '2px',
                '3px': '3px',
                '4px': '4px',
                '6px': '6px',
                '10px': '10px',
                '12px': '12px',
                '14px': '14px',
                '15px': '15px',
                '16px': '16px',
                '17px': '17px',
                '18px': '18px',
                '20px': '20px',
                '21px': '21px',
                '24px': '24px',
                '25px': '25px',
                '27px': '27px',
                '30px': '30px',
                '36px': '36px',
                '40px': '40px',
                '45px': '45px',
                '47px': '47px',
                '48px': '48px',
                '50px': '50px',
                '56px': '56px',
                '92px': '92px',
                '98px': '98px',
                '100px': '100px',
                '157px': '157px',
                '168px': '168px',
                '250px': '250px',
            },
            borderRadius: {
                'custom-1': '4px',
                '5px': '5px',
                '8px': '8px',
            },
            letterSpacing: {
                '0.3px': '0.3px',
                '0.5px': '0.5px',
                'custom-1': '0.23px',
            },
            flex: {
                2: '2',
                3: '3',
            },
            fontFamily: {
                'rubik': ['Rubik','sans-serif'],
            },
        },
        customForms: theme => ({
            default: {
                'checkbox': {
                    color: theme('colors.blue.3'),
                },
            },
        }),
        'maxWidth': {
            '90px': '90px',
            '279px': '279px',
            '340px': '340px',
            '687px': '687px',
            '1035px': '1035px',
        },
        'minWidth': {
            '28px': '28px',
        },
        'colors': {
            'white': '#ffffff',
            'black': {
                1: '#161b3d',
            },
            'blue': {
                1: '#9fa9c5',
                2: '#eef2f9',
                3: '#0063aa',
                4: '#d2dde1',
                5: '#e0e3ec',
                6: '#eef0f9',
                7: '#f7f8ff',
                8: '#e1e6f3',
                9: '#e1e4ef',
                10: '#eef0f9',
            },
            'green': {
                1: '#5aac44',
            },
            'yellow': {
                1: '#ff9131',
            },
            'purple': {
                1: '#afacc9',
            },
        },
        'fontSize': {
            '10px': '10px',
            '12px': '12px',
            '13px': '13px',
            '14px': '14px',
            '16px': '16px',
            '18px': '18px',
            '24px': '24px',
        },
    },
    variants: {},
    corePlugins: {
        container: false,
    },
    plugins: [
        require('@tailwindcss/custom-forms'),
    ]
};
