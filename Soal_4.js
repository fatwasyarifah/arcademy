if (!Array.prototype.flatMap) {
  Object.defineProperty(Array.prototype, 'flatMap', {
    configurable: true,
    writable: true,
    value: function flatMap (callback, thisArg = undefined) {
      return this.reduce((array, ...args) => {
        const element = callback.apply(thisArg, args);

        if (Array.isArray(element)) array.push(...element);
        else array.push(element);

        return array;
      }, []);
    }
  });
}

const data = [{name:'Movies',info:'category_name',content:[{name:'Interstellar',info:'category_data'},
                                                           {name:'Dark Knight',info:'category_data'}]},		
              {name:'Music',info:'category_name',content:[{name:'Adams',info:'category_data'},
                                                          {name:'Nirvana',info:'category_data'}]}];
const transformedArray = data.flatMap(({ content, ...o }) => [o, ...content]);
console.log(transformedArray);