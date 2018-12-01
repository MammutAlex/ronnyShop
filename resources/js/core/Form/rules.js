/**
 * Created by mammut on 15.03.17.
 */
class Rules {
    /**
     * Create a new Errors instance.
     */
    constructor(rules) {
        this.rules = rules;
    }
    required(data) {

        let required = [];

        for (const id in this.rules) {
            const rule = this.rules[id];
            if (rule === 'required') {
                required.push(id);
            }
            if (rule.includes('required_if')) {
                const values = rule.split(':')[1].split(',');
                const filed = values.splice(0, 1);
                if (values.some(value => value == data[filed])) {
                    required.push(id);
                }
            }
            if (rule.includes('required_unless')) {
                const values = rule.split(':')[1].split(',');
                const filed = values.splice(0, 1);
                if (values.some(value => value != data[filed])) {
                    required.push(id);
                }
            }
        }
        return required;
    }
}

export default Rules;
