function checkingInitialType(object) {
	for (key in object) {
		if (key.indexOf('_') !== -1) {
			if (key.includes('string')) {
				console.log(object[key]);
				if (typeof (object[key]) != 'string') {
					throw Error;
				}
			} else if (key.includes('int') || key.includes('float') || key.includes('number')) {
				console.log(object[key]);
				if (typeof (object[key]) != 'number') {
					throw Error;
				} else if (key.includes('int')) {
					if (Number.isInteger(object[key])) {
						console.log("true");
					} else {
						throw Error;
					}
				} else if (key.includes('float')) {
					if (Number.isInteger(object[key])) {
						throw Error;
					} else {
						console.log("true");
					}
				}
			} else if (key.includes('bool')) {
				if (typeof (object[key]) != 'boolean') {
					throw Error;
				}
			} else if (typeof (object[key] == 'object')) {
				console.log('object' + " " + object[key]);
			} else {
				return object;
			}
		} else {
			return object;
		}
	}
	return object;
}

const obj = {
	age_int: 2,
	name_string: "Adam",
	job: null,
}

const handler2 = {
	set(target, property, value) {
		if (property.indexOf('_') !== -1) {
			if (property.indexOf('string') !== -1) {
				if (typeof (value) != 'string') {
					throw Error;
				}
			} else if (property.indexOf('int') !== -1 || property.indexOf('float') !== -1 || property.indexOf('number') !== -1) {
				if (typeof (value) != 'number') {
					throw Error;
				} else if (property.indexOf('int') !== -1) {
					if (Number.isInteger(value)) {
						console.log("true");
					} else {
						throw Error;
					}
				} else if (property.indexOf('float') !== -1) {
					if (Number.isInteger(value)) {
						throw Error;
					} else {
						console.log("true");
					}
				}
			} else if (property.indexOf('bool') !== -1) {
				if (typeof (value) != 'boolean') {
					throw Error;
				}
			}
			return target[property] = value
		} else {
			return target[property] = value
		}

	}
}

function typeCheck(obj) {
	const initialObj = checkingInitialType(obj)
	const proxy = new Proxy(initialObj, handler2);
	return proxy;
}

module.exports = typeCheck;
