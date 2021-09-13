import React, { useState, useEffect } from "react";
import { Checkbox } from "antd";

import { Link } from "react-router-dom";

const CheckboxList = ({ loadFilteredResults }) => {
  const checkProps = Object.assign({}, "defalutValue");
  const [locationChecked, setLocationChecked] = useState([]);
  const [genderChecked, setGenderChecked] = useState([]);
  const [breedChecked, setBreedChecked] = useState([]);

  let _locationChecked = [
    { id: 1, value: "4", name: "New Haven" },
    { id: 2, value: "9558", name: "Stamford" },
  ];

  const _loc = _locationChecked.reduce(
    (accumulator, currentValue, index, array) => {
      accumulator.push({
        label: currentValue.name,
        value: currentValue.value,
      });
      return accumulator;
    },
    []
  );

  let gender = [
    { id: 1, value: "1", name: "Male" },
    { id: 2, value: "2", name: "Female" },
  ];
  const _genderoption = gender.reduce(
    (accumulator, currentValue, index, array) => {
      accumulator.push({
        label: currentValue.name,
        value: currentValue.value,
      });
      return accumulator;
    },
    []
  );
  let breed = [
    { id: 1, value: "Bichon-Poo", name: "Bichon-Poo" },
    { id: 2, value: "Cavachon", name: "Cavachon" },
    {
      id: 3,
      value: "Cavalier King Charles Spaniel",
      name: "Cavalier King Charles Spaniel",
    },
    { id: 4, value: "Cavapoo", name: "Cavapoo" },
    { id: 5, value: "Chinese Crested", name: "Chinese Crested" },
    { id: 6, value: "Cockapoo", name: "Cockapoo" },
    { id: 7, value: "Comfort Goldendoodle", name: "Comfort Goldendoodle" },
    { id: 8, value: "F1 Mini Goldendoodle", name: "F1 Mini Goldendoodle" },
    { id: 9, value: "Golden Retriever", name: "Golden Retriever" },
    { id: 10, value: "Huskimo", name: "Huskimo" },
    { id: 11, value: "Maltese", name: "Maltese" },
    { id: 12, value: "Mini Aussie", name: "Mini Aussie" },
    { id: 13, value: "Mini Aussiedoodle", name: "Mini Aussiedoodle" },
    { id: 14, value: "Mini Poodle", name: "Mini Poodle" },
    { id: 15, value: "Morkie", name: "Morkie" },
    { id: 16, value: "Pembroke Welsh Corgi", name: "Pembroke Welsh Corgi" },
    { id: 17, value: "Pomeranian", name: "Pomeranian" },
    { id: 18, value: "Pomsky", name: "Pomsky" },
    { id: 19, value: "Rottweiler", name: "Rottweiler" },
    { id: 20, value: "Shih Tzu", name: "Shih Tzu" },
    { id: 21, value: "Siberian Husky", name: "Siberian Husky" },
    { id: 22, value: "Teddy Bear", name: "Teddy Bear" },
    { id: 23, value: "Yorkie", name: "Yorkie" },
  ];
  const _breedoptions = breed.reduce(
    (accumulator, currentValue, index, array) => {
      accumulator.push({
        label: currentValue.name,
        value: currentValue.value,
      });
      return accumulator;
    },
    []
  );
  const onchangeLoc = (checkedValues) => {
    setLocationChecked(checkedValues);
    loadFilteredResults(genderChecked, checkedValues, breedChecked);
  };
  const onchangeGender = (checkedValues) => {
    setGenderChecked(checkedValues);
    loadFilteredResults(checkedValues, locationChecked, breedChecked);
  };
  const onchangeBreed = (checkedValues) => {
    setBreedChecked(checkedValues);
    loadFilteredResults(genderChecked, locationChecked, checkedValues);
  };
  useEffect(() => {}, []);

  return (
    <div>
      <div className="card">
        <div className="card-header" role="tab" id="accordionHeadingThree">
          <a
            data-toggle="collapse"
            data-parent="#accordion"
            href="#accordionBodyThree"
            aria-expanded="ture"
            aria-controls="accordionBodyThree"
            className="collapsed"
          >
            Location
            <i className="ti ti-angle-down" aria-hidden="true"></i>
          </a>
        </div>
        <div
          id="accordionBodyThree"
          className="card-body pl-0 collapse show"
          role="tabpanel"
          aria-labelledby="accordionHeadingThree"
          aria-expanded="true"
          data-parent="accordion"
        >
          <Checkbox.Group
            options={_loc}
            defalutValue={[]}
            onChange={onchangeLoc}
            className="acheckbox w-100"
          />
        </div>
      </div>
      <div className="card">
        <div className="card-header" role="tab" id="accordionHeadingOne">
          <a
            data-toggle="collapse"
            data-parent="#accordion"
            href="#accordionBodyOne"
            aria-expanded="ture"
            aria-controls="accordionBodyOne"
            className=" "
          >
            Gender
            <i className="ti ti-angle-down" aria-hidden="true"></i>
          </a>
        </div>
        <div
          id="accordionBodyOne"
          className="card-body pl-0 collapse"
          role="tabpanel"
          aria-labelledby="accordionHeadingOne"
          aria-expanded="true"
          data-parent="accordion"
        >
          <Checkbox.Group
            options={_genderoption}
            defalutValue={[]}
            onChange={onchangeGender}
            className="acheckbox w-100"
          />
        </div>
      </div>
      <div className="card">
        <div className="card-header" role="tab" id="accordionHeadingTwo">
          <a
            data-toggle="collapse"
            data-parent="#accordion"
            href="#accordionBodyTwo"
            aria-expanded="false"
            aria-controls="accordionBodyTwo"
            className="collapsed"
          >
            Collection
            <i className="ti ti-angle-down" aria-hidden="true"></i>
          </a>
        </div>

        <div
          id="accordionBodyTwo"
          className="card-body pl-0 pr-0 collapse"
          role="tabpanel"
          aria-labelledby="accordionHeadingTwo"
          aria-expanded="false"
          data-parent="accordion"
        >
          <Checkbox.Group
            options={_breedoptions}
            defalutValue={[]}
            onChange={onchangeBreed}
            className="acheckbox w-100"
          />
        </div>
      </div>
    </div>
  );
};
export default CheckboxList;